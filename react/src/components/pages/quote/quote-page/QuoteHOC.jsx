import React from 'react';

const QuoteHOC = (StepComponent, next) => {
    return (
        <div>
            <StepComponent next={next} />
        </div>
    );
}

export default QuoteHOC;