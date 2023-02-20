import React from 'react'
import AccordionSummary from "@material-ui/core/AccordionSummary";
import ExpandMoreIcon from "@material-ui/icons/ExpandMore";
import Typography from "@material-ui/core/Typography";
import AccordionDetails from "@material-ui/core/AccordionDetails";
import Accordion from "@material-ui/core/Accordion";

const titleObj ={
    fontSize:20,
}

const infoObj ={
    fontSize:15,
}
//import { AiOutlineMinus, AiOutlinePlus } from 'react-icons/ai'
// eslint-disable-next-line react/prop-types
const QuestionAnswer = ({ title, info }) => {
    //const [expanded, setExpanded] = useState(false)

    return (
        <Accordion>
            <AccordionSummary
                expandIcon={<ExpandMoreIcon />}
                aria-controls="panel1a-content"
                id="panel1a-header">
                <Typography style={titleObj}>{title}</Typography>
            </AccordionSummary>
            <AccordionDetails>
                <Typography style={infoObj}>
                    {info}
                </Typography>
            </AccordionDetails>
        </Accordion>
    )
}

export default QuestionAnswer