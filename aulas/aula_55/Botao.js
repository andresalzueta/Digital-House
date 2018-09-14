import React, { Component } from 'react';

class Botao extends Component {
   
    render() {
      return (
          <button onClick={this.props.onClick}>
          {this.props.title}
          </button>
      );
    }
  }
  
  export default Botao;