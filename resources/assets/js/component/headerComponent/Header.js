import React, { Component } from 'react';
import ReactDOM from 'react-dom';

class Header extends Component{
    render () {
        return (
            <ul className="right hide-on-med-and-down">
                <li><a href="/">Home</a></li>
                <li><a href="/funup">Fun Up</a></li>
            </ul>
        );
    };
}

export default Header;

if (document.getElementById('cat-list')) {
    ReactDOM.render(<Header />, document.getElementById('cat-list'));
}



