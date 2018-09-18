import React, { Component } from 'react';
import './App.css';
import Botao from './Botao.js';
import Input from './Input.js';

//para listar tasks
let $url_list = 'http://localhost:8080/Digital-House/aulas/aula_56/public/api/listTasks'
//para adicionar tarefa
let $url_add = 'http://localhost:8080/Digital-House/aulas/aula_56/public/api/addTask'
//para deletar tarefa
let $url_delete = 'http://localhost:8080/Digital-House/aulas/aula_56/public/api/deleteTask/'
//para deletar tarefa
let $url_update = 'http://localhost:8080/Digital-House/aulas/aula_56/public/api/updateTask/'


class App extends Component {
  constructor(){
    super();

    this.state = {
      lista: []
    }
  }

  componentDidMount(){

    console.log(this.state)
    fetch($url_list, { mode:'no-cors' } )
      .then( response1 => { 
        console.log(response1)
        return response1.json() })
      .then( response2 => {
        this.setState({
           lista:response2
        })
      })
  }

  salvarNumero(event){
    this.setState({
      numero: event.target.value
    })
  }

  salvarTexto(event){
    this.setState({
        text: event.target.value
    })
  }

  salvarNaLista() {
    fetch( $url_add, { 
      headers: {
        'Accept': 'application/json',
        'Content-Type': 'application/json',
      },
      method:'POST', 
      body: { text: this.state.numero },
    })
    .then( response1 => { 
      this.setState({
          lista:response1
        })
    })
  }

  marcarComoFeito(id) {
    fetch( $url_update + id, { 
      method:'PUT',
    })
    .then( response1 => { 
      this.setState( { lista:response1 } ) 
    })
  }

  adicionarItem() {
    const novoArray = [
      ...this.state.lista,
      this.state.tarefa];
      this.setState({lista:novoArray})
      console.log(this.state.lista)
  }
 
  render() {
    return (
      <div>
        <h1> To do List </h1>
        <Input type="text" onChange={ this.salvarNumero.bind(this) }
        />
        <Botao 
          onClick={ this.salvarNaLista.bind(this) }
          title="Adicionar">
        </Botao>
        <ul>
        {
          this.state.lista.map(item=>
            <li>{item.text}</li>
          )
        }  
        </ul>
      </div>
    );
  }
}

export default App;
