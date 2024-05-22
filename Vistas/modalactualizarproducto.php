<div id="modalActualizarProducto" class="modal" style="display:block;">
    <div class="modal-content">
        <span class="close" onclick="cerrarModal()">&times;</span>
        <h2>Actualizar Producto</h2>
        <form id="formulario-actualizar-producto" method="post" action="index.php">
            <input type="hidden" name="accion" value="actualizar_producto">
            <input type="hidden" name="id" value="<?= htmlspecialchars($producto['id']) ?>">
            <label for="nombre">Nombre:</label><br>
            <input type="text" id="nombre" name="nombre" value="<?= htmlspecialchars($producto['nombre']) ?>" required><br>
            <label for="stock">Stock:</label><br>
            <input type="number" id="stock" name="stock" value="<?= htmlspecialchars($producto['stock']) ?>" required><br>
            <label for="precio">Precio:</label><br>
            <input type="number" id="precio" name="precio" value="<?= htmlspecialchars($producto['precio']) ?>" step="0.01" required><br><br>
            <button type="submit">Actualizar</button>
        </form>
    </div>
</div>

<script>
    // Función para cerrar el modal
    function cerrarModal() {
        const modal = document.getElementById('modalActualizarProducto');
        modal.style.display = 'none';
    }
</script>
