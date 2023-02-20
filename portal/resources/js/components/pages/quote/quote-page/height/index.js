import React from 'react'

export default class Height extends React.Component {
    render() {
        return (
            <div className="inner height-weight">
                <h2 className="main">What is your height?</h2>
                <div className="tabbable-panel">
                    <div className="tabbable-line">
                        <ul className="nav nav-tabs ">
                            <li className="active">
                                <a href="#pounds" data-toggle="tab">Pounds</a></li>
                            <li>
                                <a href="#kilograms" data-toggle="tab">Kilograms</a>
                            </li>
                        </ul>
                        <div className="tab-content">
                            <div className="tab-pane active" id="pounds">
                                <form>
                                    <div className="form-group padding-zero">
                                        <input type="text" className="form-control" placeholder="Pounds" />
                                    </div>
                                </form>
                            </div>
                            <div className="tab-pane" id="kilograms">
                                <form>
                                    <div className="form-group padding-zero">
                                        <input type="text" className="form-control" placeholder="Kilograms" />
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div className="clearfix"></div>
                    <button
                        onClick={this.props.next}
                        className="btn btn-brand">
                        Next
                    </button>
                </div>
            </div>
        );
    }
}
