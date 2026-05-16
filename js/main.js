/**
 * Funciones JavaScript compartidas
 * =================================
 * Aquí puedes agregar validaciones del lado del cliente,
 * utilidades, etc. que se usen en varias prácticas.
 */

/**
 * Confirmar antes de eliminar
 * @param {string} mensaje - Mensaje de confirmación
 * @returns {boolean}
 */
function confirmarEliminacion(mensaje = '¿Estás seguro de que deseas eliminar este registro?') {
    return confirm(mensaje);
}

/**
 * Validar que un campo no esté vacío
 * @param {string} valor - Valor a validar
 * @returns {boolean}
 */
function noVacio(valor) {
    return valor && valor.trim().length > 0;
}

/**
 * Validar formato de email
 * @param {string} email - Email a validar
 * @returns {boolean}
 */
function emailValido(email) {
    const regex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return regex.test(email);
}

/**
 * Inicializar confirmaciones de eliminación
 * Agrega onclick="return confirmarEliminacion()" a los botones de eliminar
 */
document.addEventListener('DOMContentLoaded', function() {
    const botonesEliminar = document.querySelectorAll('.btn-eliminar, .delete-btn, [data-confirm]');
    botonesEliminar.forEach(btn => {
        btn.addEventListener('click', function(e) {
            const mensaje = this.getAttribute('data-confirm') || '¿Estás seguro de que deseas eliminar este registro?';
            if (!confirm(mensaje)) {
                e.preventDefault();
                return false;
            }
        });
    });
});