import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Root extends Component {
    render() {
        return (
            <div>
                <h2>Hey, { window.name }</h2>
                <p>Here are the people using your application...</p>
            </div>
        );
    }
}

export default Root;

if (document.getElementById('root')) {
    ReactDOM.render(<Root />, document.getElementById('root'));
}