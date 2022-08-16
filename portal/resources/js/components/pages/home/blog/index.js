import React from 'react'
import blogImage from "../../../../assets/images/home-blog-img.png";

export default class Blogs extends React.Component {

    render() {
        return (
            <section className="home-blog">
                <h2>Blog Journal</h2>
                <h4>Home is behind, the world ahead and there are many paths to tread through shadows to the edge.</h4>
                <div className="container">
                    <div className="row">
                        <div className="col-md-4 col-sm-6">
                            <a href>
                                <img className="img-responsive" src={blogImage} alt="blog Image" />
                            </a>
                            <h4><a href="javascript:void(0)">Going against the grain, Angel Pad kills its demo</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis amet volutpat at
                                sapien</p>
                            <small>November 12, 2019</small>
                        </div>
                        <div className="col-md-4 col-sm-6">
                            <a href>
                                <img className="img-responsive" src={blogImage} alt="blog Image" />
                            </a>
                            <h4><a href>Going against the grain, Angel Pad kills its demo</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis amet volutpat at
                                sapien</p>
                            <small>November 12, 2019</small>
                        </div>
                        <div className="col-md-4 hidden-sm">
                            <a href>
                                <img className="img-responsive" src={blogImage} alt="blog Image" />
                            </a>
                            <h4><a href="javascript:void(0)">Going against the grain, Angel Pad kills its demo</a></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Lobortis amet volutpat at
                                sapien</p>
                            <small>November 12, 2019</small>
                        </div>
                        <div className="clearfix"></div>
                    </div>
                </div>
            </section>
        );
    }
}