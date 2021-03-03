1.	¿Es mejor usar NGINX o APACHE y por qué? 
•	Nginx y Apache son servidores web populares usados para enviar páginas web al navegador del usuario. En nuestro caso, desde un sitio de WordPress con un host. Datos rápidos:
•	Apache fue lanzado primero en 1995, luego llegó Nginx en el 2004.
•	Ambos son usados por grandes compañías Fortune 500 alrededor del mundo.
•	La posición de Nginx en el mercado ha ido en crecimiento constante en los últimos años.
•	En algunas ocasiones, Nginx ha tenido la ventaja competitiva en términos de desempeño.

2.	¿Por qué debemos usar MVC? 
¿Por qué utilizar MVC? Porque es un patrón de diseño de software probado y se sabe que funciona. Con MVC la aplicación se puede desarrollar rápidamente, de forma modular y mantenible. Separar las funciones de la aplicación en modelos, vistas y controladores hace que la aplicación sea muy ligera. Estas características nuevas se añaden fácilmente y las antiguas toman automáticamente una forma nueva.
El diseño modular permite a los diseñadores y a los desarrolladores trabajar conjuntamente, así como realizar rápidamente el prototipado. Esta separación también permite hacer cambios en una parte de la aplicación sin que las demás se vean afectadas.
Aunque lleva algún tiempo acostumbrarse a construir aplicaciones así, estamos seguros de que, una vez construyas tu primera aplicación con CakePHP, no querrás volver a hacerlo de otra forma.

3.	¿Para qué se usan los arreglos $_SESSION[] y $_SERVER[]? 
$_SESSION es un array especial utilizado para guardar información a través de los requests que un usuario hace durante su visita a un sitio web o aplicación. La información guardada en una sesión puede llamarse en cualquier momento mientras la sesión esté abierta.
$_SERVER es una matriz asociativa que contiene información sobre cabeceras, rutas y ubicaciones de scripts suministrada por el servidor (pero hay que tener en cuenta que no todos los servidores suministran todos los datos).

4.	¿Cuándo usamos polimorfismo? La palabra Polimorfismo significa «múltiples formas». En el caso de la programación orientada a objetos (POO) el polimorfismo está más ligado al comportamiento, por lo que pudiéramos ver más su significado como «múltiples comportamientos». Más formalmente podemos definir el polimorfismo como la característica que le permite a un cliente enviar un mensaje a objetos de diferentes tipos sin conocer exactamente el tipo que se está usando. El único requisito que deben de cumplir estos objetos es saber responder a dicho mensaje. De esta manera, bajo un mismo símbolo (el método o mensaje usado) se van a ejecutar comportamientos diferentes dependiendo de a qué objeto apunte la variable de referencia que usamos para enviar el mensaje.