import React from 'react'
import heartIcon from "../../../../assets/images/icons/icon-heart.svg";
import planetIcon from "../../../../assets/images/icons/icon-planet.svg";
import toothIcon from "../../../../assets/images/icons/icon-tooth.svg";
import snakeIcon from "../../../../assets/images/icons/icon-snake.svg";


export default class Goal extends React.Component {
    render() {
        return (
            <section className="goal">
                <div className="container">
                    <h2>Your Health is Our Goal</h2>
                    <h4>Ensuring your safety, at your home away from home</h4>
                    <div className="goal-row">
                        <div className="goal-col">
                            <div className="icon">
                                <img src={heartIcon} alt="" />
                            </div>
                            <div className="text">
                                <h4>Preventative Care</h4>
                                <p>Our plan covers routine physicals, checkups, and screenings</p>
                            </div>
                        </div>


                        <div className="goal-col">
                            <div className="icon">
                                <img src={planetIcon} alt="" />
                            </div>
                            <div className="text">
                                <h4>Global Medical Evacuation</h4>
                                <p>Ensure your safety with medical evac worldwide</p>
                            </div>
                        </div>


                        <div className="goal-col">
                            <div className="icon">
                                <img src={toothIcon} alt="" />
                            </div>
                            <div className="text">
                                <h4>International Dental & Vision</h4>
                                <p>Dental & vision are included with our expat policy</p>
                            </div>
                        </div>


                        <div className="goal-col">
                            <div className="icon">
                                <img src={snakeIcon} alt="" />
                            </div>
                            <div className="text">
                                <h4>Comprehensive Providers</h4>
                                <p>A full list of providers in each country for all of your needs</p>
                            </div>
                        </div>

                        <div className="clearfix"></div>
                    </div>
                </div>
            </section>
        );
    }
}