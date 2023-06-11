-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Servidor: 127.0.0.1
-- Tiempo de generación: 11-06-2023 a las 02:02:02
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
(8675, 67453, '', 'Cajero', 2, 'Mañana');

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
(4, 'Felipe', 'Gonzalez', '123456789', '3205566778', 'felipeg@caco.com', 67453);

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

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `detalles_compras`
--

CREATE TABLE `detalles_compras` (
  `idDetalle` int(11) NOT NULL,
  `idFactura` int(11) NOT NULL,
  `idProducto` int(11) NOT NULL,
  `DecCantidad` int(11) NOT NULL,
  `DecPrecio_Unitario` int(11) NOT NULL,
  `DecSubtotal` int(11) NOT NULL,
  `DecTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `idVenta` int(11) NOT NULL,
  `FacNumero` bigint(20) NOT NULL,
  `FacFecha` date NOT NULL,
  `FacHora` time NOT NULL,
  `idCliente` int(11) DEFAULT NULL,
  `idCaja` int(11) NOT NULL,
  `FacNombre_Cajero` varchar(30) NOT NULL,
  `FacIva` int(11) NOT NULL,
  `FacSubtotal` int(11) NOT NULL,
  `FacTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  `Usuarios` varchar(7) NOT NULL,
  `Clave` varchar(20) NOT NULL,
  `Rol` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Volcado de datos para la tabla `usuarios_pass`
--

INSERT INTO `usuarios_pass` (`Id_UsuariosPass`, `idEmpleado`, `Usuarios`, `Clave`, `Rol`) VALUES
(1, 103489, 'AMan395', '39509342', 'GG'),
(2, 1234, 'SHor102', '10234567', 'JD'),
(3, 45678, 'CPad105', '105345678', 'AX'),
(4, 67453, 'YLey765', '7654321', 'CJ');

-- --------------------------------------------------------

--
-- Estructura de tabla para la tabla `ventas`
--

CREATE TABLE `ventas` (
  `idVenta` int(11) NOT NULL,
  `idCajero` int(11) NOT NULL,
  `VenProducto` varchar(30) DEFAULT NULL,
  `VenNombre_Cajero` varchar(30) DEFAULT NULL,
  `VenFecha` date NOT NULL,
  `VenHora` time NOT NULL,
  `VenPrecio` int(11) NOT NULL,
  `VenCantidad` int(11) NOT NULL,
  `VenTotal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
  ADD PRIMARY KEY (`idCaja`);

--
-- Indices de la tabla `cajeros`
--
ALTER TABLE `cajeros`
  ADD PRIMARY KEY (`idCajero`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `clientes`
--
ALTER TABLE `clientes`
  ADD PRIMARY KEY (`idCliente`),
  ADD KEY `idEmpleado` (`idEmpleado`);

--
-- Indices de la tabla `compras`
--
ALTER TABLE `compras`
  ADD PRIMARY KEY (`idCompra`),
  ADD KEY `idCliente` (`idCliente`);

--
-- Indices de la tabla `detalles_compras`
--
ALTER TABLE `detalles_compras`
  ADD PRIMARY KEY (`idDetalle`),
  ADD KEY `idFactura` (`idFactura`),
  ADD KEY `idProducto` (`idProducto`);

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
  ADD UNIQUE KEY `EmpIdentificacion` (`EmpIdentificacion`);

--
-- Indices de la tabla `facturas`
--
ALTER TABLE `facturas`
  ADD PRIMARY KEY (`idFactura`),
  ADD KEY `idVenta` (`idVenta`),
  ADD KEY `idCliente` (`idCliente`),
  ADD KEY `idCaja` (`idCaja`);

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
  ADD KEY `idCajero` (`idCajero`);

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
  MODIFY `idCaja` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `cajeros`
--
ALTER TABLE `cajeros`
  MODIFY `idCajero` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8676;

--
-- AUTO_INCREMENT de la tabla `clientes`
--
ALTER TABLE `clientes`
  MODIFY `idCliente` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT de la tabla `compras`
--
ALTER TABLE `compras`
  MODIFY `idCompra` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `detalles_compras`
--
ALTER TABLE `detalles_compras`
  MODIFY `idDetalle` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idFactura` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT de la tabla `inventarios`
--
ALTER TABLE `inventarios`
  MODIFY `idInventario` int(11) NOT NULL AUTO_INCREMENT;

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
  MODIFY `idProducto` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
  MODIFY `idVenta` int(11) NOT NULL AUTO_INCREMENT;

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
  ADD CONSTRAINT `cajeros_ibfk_1` FOREIGN KEY (`idEmpleado`) REFERENCES `empleados` (`idEmpleado`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Filtros para la tabla `detalles_compras`
--
ALTER TABLE `detalles_compras`
  ADD CONSTRAINT `idFactura` FOREIGN KEY (`idFactura`) REFERENCES `facturas` (`idFactura`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idProducto` FOREIGN KEY (`idProducto`) REFERENCES `productos` (`idProducto`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `idCaja` FOREIGN KEY (`idCaja`) REFERENCES `cajas` (`idCaja`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `idCliente` FOREIGN KEY (`idCliente`) REFERENCES `clientes` (`idCliente`),
  ADD CONSTRAINT `idVenta` FOREIGN KEY (`idVenta`) REFERENCES `ventas` (`idVenta`) ON DELETE NO ACTION ON UPDATE NO ACTION;

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
  ADD CONSTRAINT `ventas_ibfk_1` FOREIGN KEY (`idCajero`) REFERENCES `cajeros` (`idCajero`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
