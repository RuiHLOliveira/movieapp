function menu () {
    
    const itens = [
        {title: 'Filmes', link: 'filmes.html'},
        {title: 'Cadastro de Generos', link: 'cadastroGeneros.html'},
    ]

    let menu = '';
    itens.forEach(element => {
        menu += `<a class="btn" href="${element.link}">${element.title}</a>`;
    });

    return menu; 
}