class Tela extends React.Component {
    constructor() {
        super();
        this.state = {
            numero:0
        }
        this.aumentarNumero = this.aumentarNumero.bind(this);
        this.diminuirNumero = this.diminuirNumero.bind(this);
    }

    aumentarNumero() {
        let numero = this.state.numero
        this.setState({
            numero: ++this.state.numero
        })
    }

    diminuirNumero() {
        let numero = this.state.numero
        this.setState({
            numero: --this.state.numero
        })
    }


    // ()=> é uma arrowfunction
    render() {
        return (
            <div>
                <p>Número: { this.state.numero }</p>
                <button onClick={ this.aumentarNumero.bind(this) }>
                    Aumentar
                </button>
                <button onClick={ this.diminuirNumero.bind(this) }>
                    Diminuir
                </button>
            </div>
        )
    }
}

ReactDOM.render(<Tela />, document.getElementById('root'));