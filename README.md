# mvc-test
prueba tecnica ariadna

PRUEBA TÉCNICA PARA SELECCIÓN DE DESARROLLADOR BACK 

Consideraciones de Análisis 
Se requiere registrar información de los Trámites realizados en la entidad a fin de obtener trazabilidad del tratamiento de información de empleados y terceros (entiéndase terceros como personas externas a la entidad). 

Información relevante: 
Trámites: número y año de radicación, nombre del trámite, descripción, personas involucradas. Personas: Tipo de identificación, Identificación, Nombre, TeléfonoEmpleados: 

Algunos resultados esperados: 
Registro y consulta de datos mediante interfaz Web y eventualmente otras interfaces. Validación y seguridad en el registro de la información. Permitir Ingreso y edición de personas y empleados. Permitir Ingreso, edición y eliminación de Trámites. Presente un modelo general de casos de uso: 

Respuesta:  




B. Consideraciones de Diseño (Arquitectura) 1) Presente un diseño general orientado a objetos, definiendo las clases y funciones necesarias, herencia y otros componentes deseados. Respuesta: 

 
















2) Presente un diseño general para la base de datos 
TRÁMITE Radicación, fecha (año, mes, día), personas y empleados 
PERSONA Identificación, Tipo, Nombre, Teléfono, Dirección residencia 
TABLA EMPLEADO Fecha de ingreso, dependencia

 




















Cuestionario 
Explique la utilidad del Modelo Vista Controlador y/o qué modelo de desarrollo sugeriría para desarrollar el aplicativo 

Respuesta: 

El patrón de programación es muy útil por las capas de abstracción con las que insta a programar, al separar las vistas de la lógica y las bases de datos, podemos mantener el código mas fácil de leer, corregir, e incrementar su funcionalidades, hay mas agilidad a la hora de implementar herramientas de desarrollo como jQuery, al separar capas es posible hacer modificaciones sin afectar al resto del desarrollo, aparte de este patrón de arquitectura el modelo presentación-abstracción-control (PAC) implementado por Drupal que es un poderoso gestor de contenido con herramientas modulares lo que le da versatilidad y facilidad para desarrollos web de cualquier tipo.

C. Consideraciones de Implementación
 1) Base de datos Considere estas consultas en lenguaje MYSQL: Conocer toda la información de los empleados Respuesta

SELECT * FROM empleados

Conocer los trámites en los que esté relacionado la persona con ID: 123456 Respuesta 


SELECT * FROM transaction WHERE transaction.id_person=123456


Conocer el listado de empleados que se hayan vinculado después del 1 de noviembre de 2012. Respuesta 

SELECT * FROM empleados WHERE empleados.fecha_ingreso <= 2018-11-01


2) Desarrollo utilizando HTML, Javascript y PHP: REQUERIMIENTO Construya un formulario que permita realizar lo siguiente: CONDICIONES • Prohibir el acceso directo a las paginas a menos que se haya logueado. • El año de radicación es una lista desplegable que va desde 2007 a 2013 • El formulario debe validar que el número de radicación es un campo numérico • El formulario debe permitir consultar los registros ingresados • El formulario debe validar que un registro no puede ser ingresado más de una vez. • El formulario debe mostrar mensaje de alerta cuando no encuentre registros. • Los temas deben estar almacenadas en una tabla de la BD. • El patrón de arquitectura a implementar debe ser MVC. • Las validación del lado del cliente hacerlas con JavaScript, jQuery o Mootols. pág 6 developmenttest FUNCIONES A ELABORAR • Para el número de radicación: Construir una función en Ajax o jQuery para determinar si una cadena de caracteres es una expresión numérica. Nota: No incluir separadores decimales o de millares. • Para los temas: Construir una función en Ajax o jQuery para determinar qué valores han sido seleccionados en una lista de múltiple selección de un formulario.






