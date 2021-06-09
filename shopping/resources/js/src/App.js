import React, { Component } from 'react';
import { render } from 'sass';
import ReactDOM from 'react-dom'
import Home  from './components/Home';

class App extends Component {
    render(){
        return(
            <div className="container">
                <Home></Home>
            </div>
        );
    }
}

if  (document.getElementById('root')) {
    ReactDOM.render(<App/>, document.getElementById('root'));
}