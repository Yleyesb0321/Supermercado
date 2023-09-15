-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 15-09-2023 a las 04:43:21
-- Versión del servidor: 10.4.28-MariaDB
-- Versión de PHP: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de datos: `supermegaplus`
--

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `auxiliares`
--

CREATE TABLE `auxiliares` (
  `idAuxiliar` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `EmpNombre` varchar(30) NOT NULL,
  `EmpCargo` varchar(30) DEFAULT NULL,
  `AuxTurno` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajas`
--

CREATE TABLE `cajas` (
  `idCaja` int(11) NOT NULL,
  `CajNumero` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cajas`
--

INSERT INTO `cajas` (`idCaja`, `CajNumero`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `cajeros`
--

CREATE TABLE `cajeros` (
  `idCajero` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `EmpNombre` varchar(30) NOT NULL,
  `EmpCargo` varchar(30) NOT NULL,
  `cajNumero_Caja` int(11) NOT NULL,
  `cajTurno` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `cajeros`
--

INSERT INTO `cajeros` (`idCajero`, `idEmpleado`, `EmpNombre`, `EmpCargo`, `cajNumero_Caja`, `cajTurno`) VALUES
(8675, 67453, 'Yecid', 'Cajero', 2, 'Mañana'),
(225671, 45678, 'Claudia', 'Cajero', 1, 'Tarde');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `clientes`
--

CREATE TABLE `clientes` (
  `idCliente` int(11) NOT NULL,
  `CliNombre` text NOT NULL,
  `CliApellido` text NOT NULL,
  `CliIdentificacion` varchar(15) NOT NULL,
  `CliTelefono` varchar(15) NOT NULL,
  `CliCorreo` varchar(30) NOT NULL,
  `idEmpleado` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `clientes`
--

INSERT INTO `clientes` (`idCliente`, `CliNombre`, `CliApellido`, `CliIdentificacion`, `CliTelefono`, `CliCorreo`, `idEmpleado`) VALUES
(2, 'Andres', 'Marin', '1052345678', '3503456789', 'amarin@cliente.com', 67453),
(4, 'Felipe', 'Gonzalez', '123456789', '3205566778', 'felipeg@caco.com', 67453),
(10, 'Carolina', 'Manrique', '12300000', '7890065', 'cata@gmail.com', 67453),
(21, 'Alexander', 'Benitez', '69045999', '5812345', 'alex_benito@camelas.com', 1234),
(23, 'Tom', 'Cruze', '222222', '898989', 'tomc@mision.imosible.com', 45678),
(34, 'Angelina', 'Hollie', '77777777', '45454545', 'angelina@hollywood.com', 1234);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `compras`
--

CREATE TABLE `compras` (
  `idCompra` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `ComFecha` date NOT NULL,
  `ComHora` time NOT NULL,
  `ComPrecio` int(11) NOT NULL,
  `ComCantidad` int(11) NOT NULL,
  `ComTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `compras`
--

INSERT INTO `compras` (`idCompra`, `idCliente`, `ComFecha`, `ComHora`, `ComPrecio`, `ComCantidad`, `ComTotal`) VALUES
(1, 2, '2023-06-20', '19:30:09', 12400, 2, 24800),
(2, 34, '2023-09-08', '19:22:30', 2800, 2, 5600);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `devoluciones`
--

CREATE TABLE `devoluciones` (
  `idDevolucion` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `idJefe_Dpto` int(11) NOT NULL,
  `DevNombre_Producto` varchar(50) NOT NULL,
  `DevCodigo_Producto` varchar(50) NOT NULL,
  `DevCantidad` int(11) NOT NULL,
  `DevNombre_Proveedor` varchar(50) NOT NULL,
  `DevFecha` date DEFAULT NULL,
  `DevHora` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `empleados`
--

CREATE TABLE `empleados` (
  `idEmpleado` int(11) NOT NULL,
  `EmpNombre` varchar(30) NOT NULL,
  `EmpApellido` varchar(30) NOT NULL,
  `EmpIdentificacion` varchar(12) NOT NULL,
  `EmpCargo` varchar(30) NOT NULL,
  `EmpTelefono` varchar(20) NOT NULL,
  `EmpDireccion` varchar(50) NOT NULL,
  `EmpCorreo` varchar(50) NOT NULL,
  `EmpHorario` varchar(30) NOT NULL,
  `EmpSueldo` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `empleados`
--

INSERT INTO `empleados` (`idEmpleado`, `EmpNombre`, `EmpApellido`, `EmpIdentificacion`, `EmpCargo`, `EmpTelefono`, `EmpDireccion`, `EmpCorreo`, `EmpHorario`, `EmpSueldo`) VALUES
(1234, 'Sebastian', 'Horta', '10234567', 'Jefe_Operaciones', '3137068674', 'Cra 23 N 12-67 Pereira', 'sebashorta@gmail.com', 'Mañana', 2500000),
(45678, 'Claudia', 'Padilla', '105345678', 'Auxiliar', '3243358304', 'Av 15 N 78-12 El Poblado Medellin', 'viviPad22@gmail.com', 'Tarde', 1800000),
(67453, 'Yecid', 'Leyes', '7654321', 'Cajero', '3145678900', 'Cll 2 N 17A-34 Manzanares Bogota', 'yley34@gmail.com', 'Tarde', 1800000),
(103489, 'Abaned', 'Manrique', '39509342', 'Gerente', '350347856', 'Cra 2 Bis N 09-77 Pamplona Huila', 'Abaman@gmail.com', 'Mañana', 3500000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `facturas`
--

CREATE TABLE `facturas` (
  `idFactura` int(11) NOT NULL,
  `idCliente` int(11) NOT NULL,
  `Fecha` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `facturas`
--

INSERT INTO `facturas` (`idFactura`, `idCliente`, `Fecha`) VALUES
(77, 2, '2023-09-11'),
(78, 2, '2023-09-11'),
(79, 2, '2023-09-11'),
(80, 34, '2023-09-12'),
(81, 34, '2023-09-12'),
(82, 4, '2023-09-14'),
(83, 4, '2023-09-14'),
(84, 4, '2023-09-14'),
(85, 4, '2023-09-14');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `inventarios`
--

CREATE TABLE `inventarios` (
  `idInventario` int(11) NOT NULL,
  `InvCodigo_Producto` int(11) NOT NULL,
  `InvNombre_Producto` varchar(30) NOT NULL,
  `InvTipo_Producto` varchar(30) NOT NULL,
  `InvCantidad` int(11) NOT NULL,
  `InvPrecio` int(11) NOT NULL,
  `InvNombre_Proveedor` varchar(30) NOT NULL,
  `InvTotal_Producto` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `inventarios`
--

INSERT INTO `inventarios` (`idInventario`, `InvCodigo_Producto`, `InvNombre_Producto`, `InvTipo_Producto`, `InvCantidad`, `InvPrecio`, `InvNombre_Proveedor`, `InvTotal_Producto`) VALUES
(1, 1, 'Chocolisto', 'Tarro 1000gr', 20, 20000, 'Ruben Garces', 400000),
(2, 2, 'Chocolisto', 'Bolsa 450gr', 25, 10300, 'Ruben Garces', 257500),
(3, 3, 'Leche Colanta', 'Bolsa 1000ml', 35, 2900, 'Felipe Angarita', 101500),
(4, 4, 'Arroz Diana', 'Bolsa 3000gr', 70, 10500, 'Diana Marquez', 735000);

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `jefes_dptos`
--

CREATE TABLE `jefes_dptos` (
  `idJefe_Dpto` int(11) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `EmpNombre` varchar(30) NOT NULL,
  `EmpCargo` varchar(15) NOT NULL,
  `JefTurno` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `pedidos`
--

CREATE TABLE `pedidos` (
  `idPedido` int(11) NOT NULL,
  `idAuxiliar` int(11) NOT NULL,
  `idProveedor` int(11) NOT NULL,
  `PedNombreProducto` varchar(50) NOT NULL,
  `PedCodigo` int(11) NOT NULL,
  `PedCantidad` int(11) NOT NULL,
  `PedPrecio` int(11) NOT NULL,
  `PedFecha` date NOT NULL,
  `PedNumero_Orden` bigint(20) NOT NULL,
  `PedNombre_Proveedor` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `productos`
--

CREATE TABLE `productos` (
  `idProducto` int(11) NOT NULL,
  `idInventario` int(11) NOT NULL,
  `idCompra` int(11) NOT NULL,
  `ProCodigo` int(11) NOT NULL,
  `ProNombre_Producto` varchar(30) NOT NULL,
  `ProDescripcion_Producto` varchar(30) NOT NULL,
  `ProCantidad_Producto` int(11) NOT NULL,
  `ProPrecio_Producto` int(11) NOT NULL,
  `ProLote_Producto` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `productos`
--

INSERT INTO `productos` (`idProducto`, `idInventario`, `idCompra`, `ProCodigo`, `ProNombre_Producto`, `ProDescripcion_Producto`, `ProCantidad_Producto`, `ProPrecio_Producto`, `ProLote_Producto`) VALUES
(1, 2, 1, 1, 'Chocolisto', 'Tarro 1000gr', 1, 20000, '16203013'),
(3, 2, 2, 2, 'Chocolisto', 'Bolsa 500gr', 2, 2500, '02785690'),
(4, 4, 1, 5456, 'Mani moto', 'prueba', 10, 20000, '16203013');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `proveedores`
--

CREATE TABLE `proveedores` (
  `idProveedor` int(11) NOT NULL,
  `idAuxiliar` int(11) NOT NULL,
  `ProNombre` varchar(30) NOT NULL,
  `ProNit` bigint(20) DEFAULT NULL,
  `ProDireccion` varchar(50) NOT NULL,
  `ProTelefono` varchar(15) NOT NULL,
  `ProCorreo` varchar(50) NOT NULL,
  `ProCodigo_Producto` int(11) NOT NULL,
  `ProCantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `usuarios_pass`
--

CREATE TABLE `usuarios_pass` (
  `Id_UsuariosPass` int(10) NOT NULL,
  `idEmpleado` int(11) NOT NULL,
  `EmpNombre` text NOT NULL,
  `Usuarios` varchar(7) NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `Rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_pass`
--

INSERT INTO `usuarios_pass` (`Id_UsuariosPass`, `idEmpleado`, `EmpNombre`, `Usuarios`, `Clave`, `Rol`) VALUES
(1, 103489, 'Abaned', 'AMan395', '39509342', 'GG'),
(2, 1234, 'Sebastian', 'SHor102', '10234567', 'JD'),
(3, 45678, 'Claudia', 'CPad105', '105345678', 'AX'),
(4, 67453, 'Yecid', 'YLey765', '7654321', 'CJ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `idCajero` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `VenCantidad` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `ventas`
--

INSERT INTO `ventas` (`idVenta`, `idFactura`, `idCajero`, `idProducto`, `VenCantidad`) VALUES
(8, 79, 225671, 1, 10),
(9, 79, 225671, 1, 10),
(10, 79, 225671, 1, 10),
(11, 79, 225671, 3, 20),
(12, 77, 225671, 1, 50),
(13, 77, 225671, 1, 50),
(14, 77, 225671, 1, 50),
(15, 77, 225671, 1, 50),
(16, 80, 225671, 4, 10),
(17, 80, 225671, 1, 20),
(21, 81, 8675, 4, -13),
(22, 81, 8675, 4, -13),
(23, 79, 225671, 4, 2),
(24, 84, 8675, 4, 13);

--
-- Índices para tablas volcadas
--

--
-- Indices de la tabla `auxiliares`
--
ALTER TABLE `auxiliares`
  ADD PRIMARY KEY (`idAuxiliar`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `cajas`
--
ALTER TABLE `cajas`
  ADD PRIMARY KEY (`idCaja`),
  ADD KEY `CajNumero` (`CajNumero`);

--
-- Indices de la tabla `cajeros`
--
ALTER TABLE `cajeros`
  ADD PRIMARY KEY (`idCajero`),
  ADD KEY `idEmpleado` (`idEmpleado`),
  ADD KEY `cajNumero_Caja` (`cajNumero_Caja`),
  ADD KEY `EmpNombre` (`EmpNombre`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD PRIMARY KEY (`idDevolucion`),
  ADD KEY `idProveedor` (`idProveedor`),
  ADD KEY `idJefe_Dpto` (`idJefe_Dpto`);

--
-- Indices de la tabla `empleados`
--
ALTER TABLE `empleados`
  ADD PRIMARY KEY (`idEmpleado`),
  ADD UNIQUE KEY `EmpIdentificacion` (`EmpIdentificacion`),
  ADD KEY `EmpNombre` (`EmpNombre`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `idCliente_Cliente` (`idCliente`);

--
-- Indices de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  ADD PRIMARY KEY (`idInventario`);

--
-- Indices de la tabla `jefes_dptos`
--
ALTER TABLE `jefes_dptos`
  ADD PRIMARY KEY (`idJefe_Dpto`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  ADD PRIMARY KEY (`idPedido`);

--
-- Indices de la tabla `productos`
--
ALTER TABLE `productos`
  ADD PRIMARY KEY (`idProducto`),
  ADD KEY `idInventario` (`idInventario`),
  ADD KEY `idCompra` (`idCompra`);

--
-- Indices de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD PRIMARY KEY (`idProveedor`),
  ADD KEY `idAuxiliar` (`idAuxiliar`);

--
-- Indices de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  ADD PRIMARY KEY (`Id_UsuariosPass`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD PRIMARY KEY (`idVenta`),
  ADD KEY `idCajero` (`idCajero`),
  ADD KEY `idProducto_Producto` (`idProducto`),
  ADD KEY `idFactura_Factura` (`idFactura`);

--
-- AUTO_INCREMENT de las tablas volcadas
--

--
-- AUTO_INCREMENT de la tabla `auxiliares`
--
ALTER TABLE `auxiliares`
  MODIFY `idAuxiliar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajas`
--
ALTER TABLE `cajas`
  MODIFY `idCaja` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `cajeros`
--
ALTER TABLE `cajeros`
  MODIFY `idCajero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=225672;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT de la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  MODIFY `idDevolucion` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `empleados`
--
ALTER TABLE `empleados`
  MODIFY `idEmpleado` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=103490;

--
-- AUTO_INCREMENT de la tabla `facturas`
--
ALTER TABLE `facturas`
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=86;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `idInventario` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `jefes_dptos`
--
ALTER TABLE `jefes_dptos`
  MODIFY `idJefe_Dpto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `pedidos`
--
ALTER TABLE `pedidos`
  MODIFY `idPedido` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `productos`
--
ALTER TABLE `productos`
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `proveedores`
--
ALTER TABLE `proveedores`
  MODIFY `idProveedor` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  MODIFY `Id_UsuariosPass` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT de la tabla `ventas`
--
ALTER TABLE `ventas`
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- Restricciones para tablas volcadas
--

--
-- Filtros para la tabla `auxiliares`
--
ALTER TABLE `auxiliares`
  ADD CONSTRAINT `auxiliares_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `cajeros`
--
ALTER TABLE `cajeros`
  ADD CONSTRAINT `cajeros_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cajeros_ibfk_2` FOREIGN KEY (`cajNumero_Caja`) REFERENCES `cajas` (`CajNumero`);

--
-- Filtros para la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD CONSTRAINT `clientes_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`);

--
-- Filtros para la tabla `compras`
--
ALTER TABLE `compras`
  ADD CONSTRAINT `compras_ibfk_1` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Filtros para la tabla `devoluciones`
--
ALTER TABLE `devoluciones`
  ADD CONSTRAINT `idJefe_Dpto` FOREIGN KEY (`idJefe_Dpto`) REFERENCES `jefes_dptos` (`idJefe_Dpto`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idProveedor` FOREIGN KEY (`idProveedor`) REFERENCES `proveedores` (`idProveedor`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD CONSTRAINT `idCliente_Cliente` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `jefes_dptos`
--
ALTER TABLE `jefes_dptos`
  ADD CONSTRAINT `jefes_dptos_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`);

--
-- Filtros para la tabla `productos`
--
ALTER TABLE `productos`
  ADD CONSTRAINT `idCompra` FOREIGN KEY (`idCompra`) REFERENCES `compras` (`idCompra`) ON DELETE NO ACTION ON UPDATE CASCADE,
  ADD CONSTRAINT `idInventario` FOREIGN KEY (`idInventario`) REFERENCES `inventarios` (`idInventario`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Filtros para la tabla `proveedores`
--
ALTER TABLE `proveedores`
  ADD CONSTRAINT `proveedores_ibfk_1` FOREIGN KEY (`idAuxiliar`) REFERENCES `auxiliares` (`idAuxiliar`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Filtros para la tabla `usuarios_pass`
--
ALTER TABLE `usuarios_pass`
  ADD CONSTRAINT `usuarios_pass_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`);

--
-- Filtros para la tabla `ventas`
--
ALTER TABLE `ventas`
  ADD CONSTRAINT `idFactura_Factura` FOREIGN KEY (`idFactura`) REFERENCES `facturas` (`idFactura`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `idProducto_Producto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idCajero`) REFERENCES `cajeros` (`idCajero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
