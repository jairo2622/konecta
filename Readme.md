El programa se debe de ejecutar en un servidor local con la base de datos operando.

La sentencia para conocer el producto con mayor numero de stock es:
SELECT MAX(stock), nombre FROM inventario

La otra sentencia por razones de tiempo no pude realizarla, pero en si se tendria que realizar
una nueva tabla compuesta por los datos id y stock que almacenara los datos de compra y que
fuese sumando la cantidad de productos comprados y relacionandolos con el id.