#!/bin/bash

echo "CLASIFICADORA ALMACEN ZEPY S.A"
echo "------------------------------"
echo ""
echo "BUSCAR SEGUN CRITERIO "
echo "1. BUSQUEDA POR PRODUCTO"
echo "2. BUSQUEDA POR CODIGO"
echo "3. BUSQUEDA POR FECHA PRODUCCION"
echo "4. BUSQUEDA POR ESTANTE"
echo "5. BUSQUEDA POR CANTIDAD"
echo "6. INSERTAR NUEVO PRODUCTO"
echo "7. SALIR"
read opcion 
case $opcion in
        
        1)
                echo "INTRODUCE EL NOMBRE DEL PRODUCTO"
		read producto
		grep "$producto" /home/pedro/almacen/base_datos.txt
		sleep 3
		echo "PULSE CUALQUIER TECLA PARA CONTINUAR"
		read intro
		sh almacen.sh
		;;
	2)
                echo "INTRODUCE EL CODIGO"
                read codigo
                grep "$codigo" /home/pedro/almacen/base_datos.txt
                sleep 3
                echo "PULSE CUALQUIER TECLA PARA CONTINUAR"
                read intro
                sh almacen.sh
                ;;
	3)
                echo "INTRODUCE LA FECHA DE PRODUCCION"
                read fecha
                grep "$fecha" /home/pedro/almacen/base_datos.txt
                sleep 3
                echo "PULSE CUALQUIER TECLA PARA CONTINUAR"
                read intro
                sh almacen.sh
                ;;
	4)
                echo "INTRODUCE EL NUMERO DE ESTANTES"
                read estante
                grep "$estante" /home/pedro/almacen/base_datos.txt
                sleep 3
                echo "PULSE CUALQUIER TECLA PARA CONTINUAR"
                read intro
                sh almacen.sh
                ;;
	5)
                echo "INTRODUCE LA CANTIDAD"
                read cantidad
                grep "$cantidad" /home/pedro/almacen/base_datos.txt
                sleep 3
                echo "PULSE CUALQUIER TECLA PARA CONTINUAR"
                read intro
                sh almacen.sh
                ;;
	6)
                sh clas_almacen.sh
                ;;

	7)
                echo "OPCION NO ADMITIDA"
                sleep 2
                echo "PULSA DEL 1 AL 7"
                sleep 3
                sh almacen.sh
                ;;
esac
