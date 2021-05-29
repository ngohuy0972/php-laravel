import React from 'react';
import ReactDOM from 'react-dom';
import Home from './Components/Home';

function App() {
    return(
        <div className="container">
            <Home></Home>
        </div>
    );
}

export default App;

if  (document.getElementById('root')) {
    ReactDOM.render(<App/>, document.getElementById('root'));
}