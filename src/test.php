<?php require_once("http://localhost:8087/JavaBridge/java/Java.inc");

$clojure = new java("clojure.java.api.Clojure");
$load_string = $clojure->var("clojure.core", "load-string");
//$three = $load_string->invoke("(+ 1 2)");
//var_dump(java_values($three));
$load_string->invoke("#(println
\"hi\")")->invoke();
?>

