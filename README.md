# Composición VS Herencia
En la programación orientada a objetos hay grupos que siguen la regla: “preferir la composición sobre la herencia”, donde la función de cualquiera de estas es definir las relaciones entre las clases. La composición y la herencia son características fundamentales de la Programación Orientada a Objetos(POO), que nos proporciona el mecanismo para relacionar código partiendo de otras clases existentes. En este artículo veremos el porqué del principio de utilizar la composición sobre la herencia.

Herencia en POO
--

Es el mecanismo en el cual una clase (Clase B), se crea a partir de otra (Clase A), adquiriendo (heredando) la clase B métodos y atributos de la clase A. La clase B, que adquiere métodos y atributos de otra clase (Clase A) se denomina subclase; y la clase A, que proporciona métodos y atributos a otra clase (Clase B), se le denomina superclase o clase padre.

En la herencia, la subclase siempre será del mismo tipo de la superclase, por lo que se dice que mantiene una relación “Es una ” (Is a), o sea la Clase B es una Clase A. ¿Quieres Saber más?

Composición en POO
--

Es el mecanismo en el cual una clase se construye a partir de otros objetos de igual o distinto tipo, pudiéndolos combinar para obtener la funcionalidad deseada. En la composición la nueva clase, mantiene una relación  “Usa/Tiene un” (Uses/Has a), con los objetos que son parte de la clase.

Por ejemplo, si tomamos la computadora como una clase, veremos que está compuesta por otros objetos, por lo que diríamos la clase computadora tiene un procesador, tiene un disco duro, etc.








¿Es malo utilizar la herencia?
--

La herencia se encuentra entre las características más importante de la programación orienta a objetos. ya que cuenta con muchas ventajas  entre las cuales podemos mencionar:

1. Ahorro de código y tiempo de desarrollo.

2. Las subclases heredan el comportamiento y atributo de la superclase.

3. Nos permite extender la funcionalidad del código heredado.

Si consideramos lo descrito anteriormente, podemos decir que utilizar la herencia no es malo, pero sí debemos considerar dónde y por qué debemos utilizar herencia.




¿Cuándo no debemos utilizar herencia?
--

1. Cuando en tu proyecto, la superclase solo es heredada por una sola subclase.

   Es totalmente innecesario crear un herencia donde la clase padre solo será heredada por una sola subclase en este caso es conveniente realizar una sola clase con métodos y atributos que se pensaba agregar a un superclase.

2. Cuando en las subclases tienes que reescribir métodos de la clase padre.

   Como pudimos ver, entre las características de la herencia se encuentra el poder ahorra código y extender la funcionalidad del código heredado. Al sobrescribir un método estamos desechando las características antes mencionadas.

3. Cuando obligamos a cualquier subclases a heredar código que no necesita.

   Al obligar a una subclase heredar código que no necesita, estamos desechando el principio de la herencia de ahorrar código, ya que lo que contenga la superclase lo contiene la subclase. Recordemos la relación, Clase B “IS A” Clase A.

4. Cuando tienes que modificar la superclase.

   La relación “es un” es más fuerte de lo que creemos, porque ha de ser de por vida. Al utilizar la herencia se debe considerar en el tiempo si la superclase cubre las necesidades de las subclases, ya que al modificar la superclase puede llegar a provocar daños en la operatividad de las subclases que la heredan.

5. Cuando hay muchos desarrolladores trabajando en el mismo proyecto.

   En cualquier momento uno de los desarrolladores se le puede ocurrir heredar una clase, sin saber que se tiene planificado hacerle modificaciones a la funcionalidad por la cual decidió heredar de esa clase.

¿Cuándo debemos utilizar la composición?
--

Pues fácil seria decir que siempre hay que usar la composición, pero la verdad no es así. Tanto la herencia como la composición tienen su lado bueno y su lado feo.

La composición es un mecanismo más pesado, requiere más clases, no es polimórfica, se necesita más tiempo para el desarrollo. Hasta aquí vimos las desventajas. Veamos qué puede hacer la composición por nosotros.

Una ventaja de la composición es que es menos propensa a fallos inesperados y en caso que sucedan, son más fáciles de localizar. Se adapta mejor a los cambios,  por ejemplo, podemos destruir elementos sin que se pierda funcionalidad.

Hasta aquí podemos decir que debemos usar composición:  cuando la herencia no tenga cabida en nuestro desarrollo.

¿Deberíamos realmente preferir la composición a la herencia?
--

1. Si crees que la herencia te puede complicar el diagrama, o la progamación, entonces la composición es una buena alternativa.
2. La herencia, cuando se usa por una razón incorrecta o se implementa descuidadamente, puede generar desafíos importantes en el futuro para cualquier desarrollador.
3. La composición introduce menos dependencias que la herencia, y hace menos suposiciones sobre cómo se usará el programa en el futuro.
4. En la composición, el código es más legible y, a diferencia de la herencia, es más fácil de depurar.
5. Con la composición es mas fácil la escalabilidad del proyecto de software.

Conclusión
--

Entonces diremos que la respuesta es: “Sí”, debemos preferir la composición a la herencia. Pero decir  “preferencia” por la composición no es una cuestión de “mejor”, es una cuestión de “lo más apropiado” para sus necesidades en un contexto específico.