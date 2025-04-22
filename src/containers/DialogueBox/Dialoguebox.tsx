import "./dialogueBox.css";

const DialogueBox = ({ text = "" }: { text: string }) => {
	return (
		<>
			<p className="dialogueBox">{text === "" ? "oups" : text}</p>
			<img
				className="downArrow"
				src="/public/down-long-solid (1).svg"
				alt="down arrow"
			/>
		</>
	);
};

export default DialogueBox;
