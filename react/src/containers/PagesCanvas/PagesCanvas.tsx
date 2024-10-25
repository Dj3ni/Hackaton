import "./PagesCanvas.css";
import DialogueBox from "../DialogueBox/Dialoguebox";
import { useState } from "react";
import { Character } from "../../dialogues/intro/dialogue";

const PageCanvas = ({
	hiro,
	pnj,
	scenArray,
	currentScene,
	onUpdateScene,
}: {
	hiro: Character;
	pnj: Character;
	currentScene: number;
	scenArray: { name: string; img: string; dialogue: number }[];
	onUpdateScene: (newScene: number) => void;
}) => {
	const [progress, setProgress] = useState(0);

	const updateProgress = (newProgress: number) => {
		setProgress(newProgress);
	};

	const getDialogue = () => {
		const currentDialogue = scenArray[progress].dialogue;
		if (scenArray[progress].name === "Hiro King") {
			return hiro.dialogue[currentDialogue];
		}
		if (scenArray[progress].name === "Agatha Clarke") {
			return pnj.dialogue[currentDialogue];
		}

		return "";
	};

	const shouldDisplayChoices =
		currentScene === 0 &&
		progress === 19 &&
		scenArray[progress].name === "Agatha Clarke";

	return (
		<main
			className="main"
			onClick={() => {
				if (!shouldDisplayChoices && progress < scenArray.length - 1) {
					setProgress(progress + 1);
				}
				if (progress === scenArray.length - 1) {
					onUpdateScene(+1);
				}
			}}
		>
			{progress === 3 && scenArray[progress].name === "Hiro King" ? (
				<p className="door">Knock Knock</p>
			) : null}

			{shouldDisplayChoices ? (
				<Choices sceneChoices={hiro.choices} onUpdateState={updateProgress} />
			) : null}

			<img className="sprite" src={scenArray[progress].img} alt="" />
			<section className="content"></section>
			<p className="CharaName">{scenArray[progress].name}</p>
			<section className="dialogue">
				<DialogueBox text={getDialogue()} />
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
	onUpdateState: (index: number) => void;
}) => {
	const selectChoice = (index: number) => {
		if (index === 1) {
			onUpdateState(26);
		} else {
			onUpdateState(20);
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

const Answers = () => {};
