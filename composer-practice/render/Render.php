<?php

class Render {
    protected $data = [];
    protected $built = null;
    public function words ($array) {
        foreach ($array as $word) {
            $this->data[] = $word;
        }
        return $this;
    }
    public function link ($char) {
        foreach ($this->data as $word) {
            $this->built .= $word.$char;
        }
        return $this;
    }
    public function get () {
        return $this->built;
    }
}