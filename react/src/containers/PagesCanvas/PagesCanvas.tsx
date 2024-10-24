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
		//Hiro King

		if (index === 2 && currentChara.name === "Hiro King") {
		}

		if (index === 8 && currentChara.name === "Hiro King") {
			setIndex(0);
			setCurrentChara(agatha);
		}
		if (index === 9 && currentChara.name === "Hiro King") {
			setIndex(5);
			setCurrentChara(agatha);
		}
		if (index === 10 && currentChara.name === "Hiro King") {
			agatha.url = "/assistant_happy.png";
			setIndex(7);
			setCurrentChara(agatha);
		}

		//Agatha
		if (index === 0 && currentChara.name === "Agatha Clarke") {
			agatha.url = "/assistant_normal.png";
			setCurrentChara(agatha);
		}
		if (index === 2 && currentChara.name === "Agatha Clarke") {
			agatha.url = "/assistant_happy.png";
			setCurrentChara(agatha);
		}
		if (index === 3 && currentChara.name === "Agatha Clarke") {
			agatha.url = "/assistant_angry.png";
			setCurrentChara(agatha);
		}
		if (index === 4 && currentChara.name === "Agatha Clarke") {
			setIndex(9);
			setCurrentChara(hero);
		}

		if (index === 6 && currentChara.name === "Agatha Clarke") {
			setIndex(10);
			setCurrentChara(hero);
		}
	};
	return (
		<main className="main" onClick={() => displayDialogue()}>
			{index === 3 && currentChara.name === "Hiro King" ? (
				<p className="door">Knock Knock</p>
			) : (
				<></>
			)}
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
