import React from 'react'
import questions from './questions'
import homeVideoThumnail from "../../../../assets/images/home-video-thumbnail.png";
import QuestionAnswer from './faq';

export default class FAQ extends React.Component {
    render() {
        return (
            <section className="questions">
                <div className="container">
                    <div className="video visible-sm">
                        <img className="img-responsive" src={homeVideoThumnail} alt="" />
                    </div>
                    <h2>Frequently Asked Questions</h2>
                    <div className="video visible-xs">
                        <img className="img-responsive" src={homeVideoThumnail} alt="" />
                    </div>


                    <div className="inner">
                        <div className="panel-group accordion" id="accordion">
                            {questions.map((question) => (
                                <QuestionAnswer key={question.id} {...question} />
                            ))}


                            <a href="javascript:void(0)" className="btn btn-brand hidden-sm hidden-xs">Ask Question</a>
                        </div>

                        <div className="video hidden-sm hidden-xs">
                            <img className="img-responsive" src={homeVideoThumnail} alt="" />
                        </div>
                    </div>

                </div>

            </section>
        );
    }
}