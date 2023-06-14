<?php
namespace App\Components;

use App\Models\Menu;

class menuRecusive {
    private $htmlSelect;
    public function __construct()
    {
        $this->htmlSelect = '';
    }

    public function menuRecusive($parentId = 0, $subMark = '' ) {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $item) {
            $this->htmlSelect .= "<option value='" . $item->id . "'>" . $subMark . $item->name . "</option>";
            $this->menuRecusive($item->id, $subMark . '*');
        }
        return $this->htmlSelect;
    }

    public function menuRecusiveEdit($parent_id, $parentId = 0, $subMark = '' ) {
        $data = Menu::where('parent_id', $parentId)->get();
        foreach ($data as $item) {
            if ($parent_id == $item->id) {
                $this->htmlSelect .= "<option selected value='" . $item->id . "'>" . $subMark . $item->name . "</option>";

            }else {
                $this->htmlSelect .= "<option value='" . $item->id . "'>" . $subMark . $item->name . "</option>";
            }
            $this->menuRecusiveEdit($parent_id ,$item->id, $subMark . '*');
        }
        return $this->htmlSelect;
    }
}
