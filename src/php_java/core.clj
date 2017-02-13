(ns php-java.core)

(import php.java.bridge.JavaBridgeRunner)

;(def runner (future (doto (JavaBridgeRunner/getInstance "8087") .waitFor)))
(def runner (JavaBridgeRunner/getInstance "8087"))
