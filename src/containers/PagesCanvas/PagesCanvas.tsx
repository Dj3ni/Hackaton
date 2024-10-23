import "./PagesCanvas.css";
import DialogueBox from "../DialogueBox/Dialoguebox";
import { useState } from "react";

const PageCanvas = () => {
	const arrayOfDialogue = [
		"Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet quod dolor, aperiam tenetur nulla deleniti consectetur nam eaque veniam deserunt, non quia quaerat odit officiis voluptatem fuga quidem rem minima?",
		"J'ai réussi!",
	];
	const [index, setIndex] = useState(0);

	const displayDialogue = () => {
		setIndex((prevIndex) =>
			prevIndex < arrayOfDialogue.length - 1 ? prevIndex + 1 : 0
		);
	};
	return (
		<main className="main" onClick={() => displayDialogue()}>
			<section className="content"></section>
			<p className="CharaName">HERO</p>
			<section className="dialogue">
				<DialogueBox text={arrayOfDialogue[index]} />
			</section>
		</main>
	);
};

export default PageCanvas;
