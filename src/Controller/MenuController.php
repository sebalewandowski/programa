<?php

namespace Programa\Controller;

use PDO;
use Programa\Model\Database;

class MenuController
{
    private $connection;
    private $stmt;

    public function __construct()
    {
        $this->connection = Database::getInstance();
        $this->stmt =  "SELECT * FROM menu";
    }


    function display_children($parent, $level)
    {
        try {
            $result = $this->connection->query($this->stmt);
            $result->execute();

            $menu = array(
                'menus' => array(),
                'parent_menus' => array()
            );

            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                //creates entry into menus array with current menu id ie. $menus['menus'][1]
                $menu['menus'][(int)$row['id']] = $row;
                //creates entry into parent_menus array. parent_menus array contains a list of all menus with children
                $menu['parent_menus'][$row['parent']][] = (int)$row['id'];
            }

            $this->nav_catelogue(0, $menu, true);
        } catch (PDOException $error) {
            echo $error->getMessage();
        }
    }

    public function nav_catelogue($parent, $menu, $top = false)
    {
        if (isset($menu['parent_menus'][$parent])) {
            //this is short code for if($top === true) { //do true } else { //do false }
            echo $top ? '<ul class="dropdown">' : '<ul>';
            foreach ($menu['parent_menus'][$parent] as $menu_id) {
                if (!isset($menu['parent_menus'][$menu_id])) {
                    echo '<li><a href="' . $menu['menus'][$menu_id]['link'] . '">' . $menu['menus'][$menu_id]['title'] . '</a></li>';
                }
                if (isset($menu['parent_menus'][$menu_id])) {
                    echo '<li><a href="#">' . $menu['menus'][$menu_id]['title'] . '</a>' . $this->nav_catelogue($menu_id, $menu) . '</li>';
                }
            }
            echo '</ul>';
        }
    }
}
