<?php

namespace extension\project\model;

use lib\db\DB;
use lib\helper\table;

/**
 * ProjectModel handles project data logic.
 */
final class ProjectModel
{
    /**
     * Get details for a specific project.
     * @param int $id
     * @return array|null
     */
    public function details(int $id): ?array
    {
        $query = 'SELECT * FROM project WHERE id = $1';
        $data = DB::connect()->query($query, $id);
        return $data[0] ?? null;
    }

    /**
     * Create a form for project creation/editing.
     * @return string (HTML)
     */
    public function createForm(): string
    {
        // Example: return HTML form as string (implement as needed)
        return '<form><!-- form fields here --></form>';
    }

    /**
     * Create a table of projects.
     * @return table
     */
    public function createTable()
    {
        $table = new table();
        $query = 'SELECT P.id, P.name, P.created FROM project P';
        if(!($data = DB::connect()->query($query))) {
            $table->setEmptyMessage('No projects found');
            return $table;
        }
  

        $table = new table();
        $table->addCol('id', 'ID');
        $table->addCol('name', 'Projectnaam');
        $table->addCol('uuid', 'GUID');
        $table->addCol('created', 'Created');

        foreach ($data as $row) {
            $table->addRow($row); // $row is assoc array
            $rowId = $row['id'];
            $updateUrl = "/project/update/$rowId";
            $deleteUrl = "/project/delete/$rowId";
            $detailsUrl = "/project/details/$rowId";

            $table->addButton($rowId, 'update', 'Update', 'btn btn-primary', $updateUrl);
            // $table->addButton($rowId, 'delete', 'Delete', 'btn btn-danger', $deleteUrl);
            $table->addDetails($rowId, $detailsUrl); // Maakt de hele rij klikbaar
        }


        return $table;
    }
}
