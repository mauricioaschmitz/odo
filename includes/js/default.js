/**
 * 2018
 * Desenvolvido por: Maurício Antonioli Schmitz
 * Analista de TI da Faculdade de Odontologia
 */

function getBaseUrl() {
    
    var baseUrl = location.origin + "/" + window.location.pathname.split('/')[1] + "/";
    return baseUrl;
}