import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import uuid from 'uuid/v5';

class PostCard extends Component {
    constructor(props) {
        super(props);
        this.state = { hasError: false };
    }

    componentDidCatch(error, info) {
        // Display fallback UI
        this.setState({ hasError: true });
        // You can also log the error to an error reporting service
        console.log(error, info);
    }

    render() {
        if (this.state.hasError) {
            // You can render any custom fallback UI
            return <h1>Something went wrong.</h1>;
        }

        return (
            <div className="card card__post_holdr" id="" key={uuid('http://example.com/hello', uuid.URL)}>
                <div className="card-content">
                    <a href="/6ix/IUndsHSZN4J">Lorem ipsum dolor sit amet, consectetur adipisicing elit.</a>
                </div>
                <div className="card-image">
                    <div className="hidden__pro_info">
                        <a href="#">
                            <img src="/img/demo/alvin.png" alt="johns profile" />
                            <div className="info__holdr">
                                <span>John Doe</span> <span>-</span> <span>2 min ago</span>
                            </div>
                        </a>
                    </div>
                    <a href="/6ix/IUndsHSZN4J"><img src="/img/demo/office.jpg" alt="ad for blah blah blah" /></a>
                </div>
                <div className="card-action">
                    <div className="row no-margin">
                        <div className="col s12 display__flex">
                            <div className="feed__back_info"><span id="feed__back_count">9999999</span></div>
                            <div className="feed__back_info"><span id="feed__back_count">9999999</span></div>
                        </div>
                        <div className="col s2">
                            <a href="#" className="btn btn-flat btn__feed_back waves-effect">
                                <i className="material-icons">i</i>
                            </a>
                        </div>
                        <div className="col s2">
                            <a href="#" className="btn btn-flat btn__feed_back waves-effect">
                                <i className="material-icons">!</i>
                            </a>
                        </div>

                        <div className="col s3 offset-s2">
                            <a href="#" className="btn blue darken-4 waves-effect">Facebook</a>
                        </div>
                        <div className="col s3">
                            <a href="#" className="btn light-blue lighten-3 waves-effect">Twitter</a>
                        </div>
                    </div>
                    <div className="hori__divider"></div>
                </div>
            </div>
        );
    }
}

export default PostCard;

if (document.getElementById('card__6_holdr')) {
    ReactDOM.render(<PostCard />, document.getElementById('card__6_holdr'));
}