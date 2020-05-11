<?php

namespace GL\Interfaces;

interface GridInterface {
	public function getId();
	public function getCol();
	public function getRow();
	public function getWidth();
	public function getHeight();
	
	public function setId($id);
	public function setRow($row = 0);
	public function setCol($row = 0);
	public function setHeight($height);
	public function setWidth($width);
}