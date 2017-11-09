import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import uuid from 'uuid/v5';
import AddPoster from '../AddPosterComponent/AddPoster';
import _6ixList from '../rightSide6ixList/6ixList';

class RightSideBar extends Component {
    render(){
        return (
            <div>
                <AddPoster />
                <_6ixList />
            </div>
        );
    }
}

export default RightSideBar;

if(document.getElementById('right__side_bar')) ReactDOM.render(<RightSideBar />, document.getElementById('right__side_bar'));