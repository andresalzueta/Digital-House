import React, { Component } from 'react';
import './App.css';
import Botao from './Botao.js';
import Input from './Input.js';

class App extends Component {
  constructor(){
    super();

    this.state = {
      lista: [],
      tarefa: ""
    }
  }
 
  salvar(event){
    const tarefa = event.target.value;
    this.setState({
      tarefa
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
        <Input type="text" onChange={(event) => {this.salvar(event)}}/>
        <Botao onClick={() => {this.adicionarItem()}} title="Adicionar">
        </Botao>
        <ul>
        {
          this.state.lista.map(item=>
            <li>{item}</li>
          )
        }  
        </ul>
      </div>
    );
  }
}

export default App;
