import "./PagesCanvas.css";
import DialogueBox from "../DialogueBox/Dialoguebox";
import { useState } from "react";
import { agatha, Character, hero } from "../../dialogues/intro/dialogue";

const PageCanvas = () => {
	const [currentChara, setCurrentChara] = useState(hero);
	const [index, setIndex] = useState(0);

	const [state, setState] = useState({
		currentChara: hero,
		index: 0,
	});

	const updateState = (newChara: any, newIndex: number) => {
		console.log(newChara, newIndex);
		setState({
			currentChara: newChara,
			index: newIndex,
		});
	};

	const displayDialogue = () => {
		// console.log(index);

		setIndex((prevIndex) => prevIndex + 1);
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
		if (index === 8 && currentChara.name === "Agatha Clarke") {
			agatha.url = "/assistant_normal.png";
			setCurrentChara(agatha);
		}
		if (index === 11 && currentChara.name === "Agatha Clarke") {
			agatha.url = "/assistant_happy.png";
			setCurrentChara(agatha);
		}

		if (index === 12 && currentChara.name === "Agatha Clarke") {
			agatha.url = "/assistant_angry.png";
			setCurrentChara(agatha);
		}

		if (index === 13 && currentChara.name === "Agatha Clarke") {
			agatha.url = "/assistant_normal.png";
			setCurrentChara(agatha);
		}
		if (index === 14 && currentChara.name === "Agatha Clarke") {
			setIndex(11);
			setCurrentChara(hero);
		}
	};
	// console.log(index, currentChara.name);

	return (
		<main className="main" onClick={() => displayDialogue()}>
			{index === 3 && currentChara.name === "Hiro King" ? (
				<p className="door">Knock Knock</p>
			) : null}

			{index === 8 && currentChara.name === "Agatha Clarke" ? (
				<Choices
					sceneChoices={state.currentChara.choices}
					onUpdateState={updateState}
				/>
			) : null}

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

const Choices = ({
	sceneChoices,
	onUpdateState,
}: {
	sceneChoices: string[];
	onUpdateState: (chara: Character, newIndex: number) => void;
}) => {
	const selectChoice = (index: number) => {
		if (index === 1) {
			onUpdateState(hero, 11);
		} else {
			onUpdateState(agatha, 8);
		}
	};

	const displayChoices = sceneChoices.map((choice: string, index: number) => (
		<button
			key={index}
			className="choiceBtn"
			onClick={() => selectChoice(index)}
		>
			{index} {choice}
		</button>
	));

	return <div className="choices">{displayChoices}</div>;
};
