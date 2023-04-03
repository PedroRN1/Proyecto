#!/bin/bash
clear
echo "ALMACEN PRODUCTOS"
echo "----------------"
echo ""
echo "REGISTRO NUEVO DE ALMACEN"
sleep 3
echo "-PRODUCTO:"
read producto
sleep 1
echo "-CODIGO:"
read codigo
sleep 1
echo "-FECHA PRODUCCIÓN:"
read fecha
sleep 1
echo "-ESTANTE:"
read estante
sleep 1
echo "-CANTIDAD:"
read cantidad
sleep 1
echo ""
echo "$producto $codigo $cantidad $fecha $estante" >> /home/pedro/almacen/base_datos.txt
 


