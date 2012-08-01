<?php

interface m14tStorageEngineTemplate {
  public function fclose();
  public function file_exists($filename);
  public function fopen($filename ,$mode, $use_include_path = false);
  public function fwrite($string);
  public function gzclose();
  public function gzeof();
  public function gzgets($length);
  public function gzopen($filename, $mode , $use_include_path = 0);
  public function is_dir($filename);
  public function is_writable($filename);
  public function mkdir($pathname, $mode = 0777, $recursive = false);
  public function rename($oldname, $newname);
  public function unlink($filename);
}
