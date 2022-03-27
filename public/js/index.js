$(document).ready(() => {
    /** Annadir nuevas frutas a la lista */
    $('body').on('click', '.agregar', () => {
        const nombre_fruta = $('#nombre_fruta').val();

        let html_ul_li = '<li>' + nombre_fruta + ' <button type="button">Borrar</button></li>'

        $('#listado_frutas > ul').append(html_ul_li)
    })

    /** Eliminar las frutas de la lista */
    $('body').on('click', '#listado_frutas button', function() {
        let this_element_dom = $(this)

        this_element_dom.parent().remove()
    })
})