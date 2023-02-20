import React from 'react'

import coverageImg from "../../../../assets/images/need-coverage.svg";


export default class Converge extends React.Component {
    render() {
        return (
            <section className="coverage-section">
                <div className="container">
                    <div className="right">
                        <div className="inner">
                            <h1>Where do you need coverage?</h1>
                            <div className="clearfix"></div>
                            <div className="coverage-card">
                                <div className="card card-left">
                                    <div className="right">
                                        <p>Worldwide</p>
                                        <span>Including the USA</span>
                                    </div>
                                </div>

                                <div className="card card-right">
                                    <div className="right">
                                        <p>Worldwide</p>
                                        <span>Excluding the USA</span>
                                    </div>
                                    <div className="clearfix"></div>
                                </div>

                                <div className="clearfix"></div>
                            </div>
                        </div>
                    </div>
                    <div className="left">
                        <img src={coverageImg} className="img-responsive" alt="" />
                    </div>
                </div>
            </section>
        );
    }
}