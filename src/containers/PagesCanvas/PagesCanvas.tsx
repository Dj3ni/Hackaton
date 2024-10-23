import "./PagesCanvas.css";
import DialogueBox from "../DialogueBox/Dialoguebox";
import { useState } from "react";
import { agatha, hero } from "../../dialogues/intro/dialogue";

const PageCanvas = () => {
	const [currentChara, setCurrentChara] = useState(hero);
	const [index, setIndex] = useState(0);

	const displayDialogue = () => {
		console.log(index);

		setIndex((prevIndex) => (prevIndex = prevIndex + 1));

		if (index === 8 && currentChara.name === "Hiro King") {
			setIndex(0);
			setCurrentChara(agatha);
		}
		if (index === 4 && currentChara.name === "Agatha Clarke") {
			setIndex(9);
			setCurrentChara(hero);
		}

		if (index === 9 && currentChara.name === "Hiro King") {
			setIndex(5);
			setCurrentChara(agatha);
		}
		if (index === 6 && currentChara.name === "Agatha Clarke") {
			setIndex(10);
			setCurrentChara(hero);
		}
		if (index === 10 && currentChara.name === "Hiro King") {
			setIndex(7);
			setCurrentChara(agatha);
		}
	};
	return (
		<main className="main" onClick={() => displayDialogue()}>
			<img className="sprite" src={currentChara.url} alt="" />
			<section className="content"></section>
			<p className="CharaName">{currentChara.name}</p>
			<section className="dialogue">
				<DialogueBox text={currentChara.dialogue[index]} />
			</section>
		</main>
	);
};

export default PageCanvas;
