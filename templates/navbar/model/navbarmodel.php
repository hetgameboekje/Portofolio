<?php
namespace templates\navbar\model;

/**
 * Class MenuItem
 * Representatie van een menu-item (link of dropdown).
 */
class MenuItem
{
    public string $type;
    public string $label;
    public ?array $route = null;
    public array $items = [];

    public function __construct(string $type, string $label, ?array $route = null)
    {
        $this->type = $type;
        $this->label = $label;
        $this->route = $route;
    }

    /**
     * Voeg een subitem toe aan een dropdown.
     * @return $this
     */
    public function addDropdownSubItem(string $name, string $extension, ?array $url = null): self
    {
        $this->items[] = [
            'label' => $name,
            'route' => $url ?? [
                'extension' => $extension,
                'action' => 'details'
            ]
        ];
        return $this;
    }

    /**
     * Zet het object om naar een array voor de view.
     */
    public function toArray(): array
    {
        $arr = [
            'type' => $this->type,
            'label' => $this->label,
        ];
        if ($this->type === 'dropdown') {
            $arr['items'] = $this->items;
        } else {
            $arr['route'] = $this->route;
        }
        return $arr;
    }
}

/**
 * Class navbarmodel
 * Bouwt het navigatiemenu op.
 */
class navbarmodel
{
    private array $navItems = [];

    /**
     * Voeg een item toe aan de navbar.
     * @param string $name
     * @param string $extension
     * @param array|null $url
     * @param bool $dropdown
     * @return MenuItem
     */
    public function addItem(string $name, string $extension, ?array $url = null, bool $dropdown = false): MenuItem
    {
        if ($dropdown) {
            $item = new MenuItem('dropdown', $name);
        } else {
            $item = new MenuItem('link', $name, $url ?? [
                'extension' => $extension,
                'action' => 'details'
            ]);
        }
        $this->navItems[] = $item;
        return $item;
    }

    /**
     * Bouw een URL op basis van het route-array.
     */
    public static function buildUrl(array $route): string
    {
        $url = '/' . $route['extension'] . '/' . $route['action'];
        if (isset($route['id'])) {
            $url .= '/' . $route['id'];
        }
        if (isset($route['subaction'])) {
            $url .= '/' . $route['subaction'];
        }
        if (isset($route['subid'])) {
            $url .= '/' . $route['subid'];
        }
        return $url;
    }

    /**
     * Bouw het menu op en geef het terug als array voor de view.
     */
    public function details(): array
    {
        $this->navItems = []; // reset

        // Gewone link
        $this->addItem('Home', 'main', ['extension' => 'dashboard', 'action' => 'details']);

        // Dropdown: About me
        $aboutDropdown = $this->addItem('About me', 'about', null, true);
        $aboutDropdown->addDropdownSubItem('Social media', 'about', ['extension' => 'about', 'action' => 'social']);
        $aboutDropdown->addDropdownSubItem('C.V.', 'about', ['extension' => 'about', 'action' => 'cv']);
        $aboutDropdown->addDropdownSubItem('Blog', 'blog', ['extension' => 'blog', 'action' => 'overview']);
        $aboutDropdown->addDropdownSubItem('Over mij', 'about', ['extension' => 'about', 'action' => 'profile']);

        // Dropdown: Projects
        $projectsDropdown = $this->addItem('Projects', 'projects', null, true);
        $projectsDropdown->addDropdownSubItem('Projecten', 'projects', ['extension' => 'projects', 'action' => 'overview']);
        $projectsDropdown->addDropdownSubItem('Todolist', 'projects');
        $projectsDropdown->addDropdownSubItem('Werkuren', 'workhour');
        // $projectsDropdown->addDropdownSubItem('BPV registratie', 'projects', ['extension' => 'projects', 'action' => 'bpv']);
        // $projectsDropdown->addDropdownSubItem('Reflectie generator', 'projects', ['extension' => 'projects', 'action' => 'reflectie']);

        // Gewone link zonder expliciete URL (wordt /contact/details)
        $this->addItem('Contact', 'contact');

        // Zet alle MenuItem objecten om naar arrays voor de view
        return array_map(fn($item) => $item->toArray(), $this->navItems);
    }
}
