<?php
namespace lib\helper;

class table
{
    private array $columns = [];
    private array $rows = [];
    private array $rowClasses = [];
    private array $buttons = [];
    private array $details = [];
    private string $tableClass = 'table table-striped table-hover table-bordered';
    private string $emptyMessage = '';

    public function addCol(string $key, string $label): void
    {
        $this->columns[$key] = $label;
    }

    /**
     * Voeg een rij toe. $row is een assoc array met keys gelijk aan de kolom keys.
     */
    public function addRow(array $row, $rowId = null): void
    {
        if ($rowId === null) {
            if (isset($row['id'])) {
                $rowId = $row['id'];
            } else {
                $rowId = uniqid('row_');
            }
        }
        $this->rows[$rowId] = $row;
    }

    public function addButton($rowId, string $action, string $label, string $class, string $url): void
    {
        $this->buttons[$rowId][] = [
            'action' => $action,
            'label' => $label,
            'class' => $class,
            'url' => $url
        ];
    }

    public function addDetails($rowId, string $url): void
    {
        $this->details[$rowId] = $url;
    }

    public function rowclass($rowId, string $class): void
    {
        $this->rowClasses[$rowId] = $class;
    }

    public function setEmptyMessage(string $message): void
    {
        $this->emptyMessage = $message;
    }

    public function render(): string
    {
        $html = '<div class="container mt-4">';
        $html .= '<div class="table-responsive">';
        $html .= '<table class="' . htmlspecialchars($this->tableClass) . '">';
        // Header
        $html .= '<thead><tr>';
        foreach ($this->columns as $label) {
            $html .= '<th>' . htmlspecialchars($label) . '</th>';
        }
        if (!empty($this->buttons) || !empty($this->details)) {
            $html .= '<th>Actions</th>';
        }
        $html .= '</tr></thead>';

        // Body
        $html .= '<tbody>';
        if (empty($this->rows)) {
            $colspan = count($this->columns) + ((!empty($this->buttons) || !empty($this->details)) ? 1 : 0);
            $html .= '<tr><td colspan="' . $colspan . '" class="text-center text-muted">'
                  . htmlspecialchars($this->emptyMessage ?: 'No data found')
                  . '</td></tr>';
        } else {
            foreach ($this->rows as $rowId => $row) {
                $class = $this->rowClasses[$rowId] ?? '';
                $detailsUrl = $this->details[$rowId] ?? null;
                $trClass = $class . ($detailsUrl ? ' table-row-link' : '');
                $trStyle = $detailsUrl ? 'cursor:pointer;' : '';
                $onclick = $detailsUrl ? "onclick=\"window.location='" . htmlspecialchars($detailsUrl) . "'\"" : '';

                $html .= '<tr'
                    . ($trClass ? ' class="' . trim(htmlspecialchars($trClass)) . '"' : '')
                    . ($trStyle ? ' style="' . $trStyle . '"' : '')
                    . ($onclick ? ' ' . $onclick : '')
                    . '>';

                // Render cellen in volgorde van columns
                foreach ($this->columns as $key => $label) {
                    $cell = isset($row[$key]) ? htmlspecialchars((string)$row[$key]) : '';
                    $html .= '<td>' . $cell . '</td>';
                }

                // Actions
                if (!empty($this->buttons[$rowId]) || isset($this->details[$rowId])) {
                    $html .= '<td style="white-space:nowrap;">';
                    if (!empty($this->buttons[$rowId])) {
                        foreach ($this->buttons[$rowId] as $btn) {
                            $html .= '<a href="' . htmlspecialchars($btn['url']) . '" class="' . htmlspecialchars($btn['class']) . '" style="margin-right:5px;">' . htmlspecialchars($btn['label']) . '</a>';
                        }
                    }
                    // Details-knop NIET tonen als de hele rij al klikbaar is
                    if (isset($this->details[$rowId]) && !$detailsUrl) {
                        $html .= '<a href="' . htmlspecialchars($this->details[$rowId]) . '" class="btn btn-info">Details</a>';
                    }
                    $html .= '</td>';
                }
                $html .= '</tr>';
            }
        }
        $html .= '</tbody></table></div>'; // Sluit table en table-responsive
        $html .= '</div>'; // Sluit container

        return $html;
    }

    // Zorg dat je object als string gebruikt kan worden (echo $table;)
    public function __toString(): string
    {
        return $this->render();
    }
}
