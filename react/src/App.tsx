import { useState } from "react";
import "./App.css";
import PageCanvas from "./containers/PagesCanvas/PagesCanvas";
import { agatha, hiro, tableauIntro } from "./dialogues/intro/dialogue";
import {
	minako,
	mysterious,
	sceneOne,
	hiro1,
} from "./dialogues/scene2/dialogue2";
import BadEnd from "./components/BadEnd/BadEnd";

function App() {
	const [scene, setScene] = useState(0);
	const [score, setScore] = useState(0);

	const updateScene = (newScene: number) => {
		setScene(newScene);
	};

	return (
		<>
			{scene === 0 ? (
				<PageCanvas
					onUpdateScene={updateScene}
					hiro={hiro}
					pnj={agatha}
					currentScene={scene}
					scenArray={tableauIntro}
				/>
			) : null}
			{scene === 1 ? (
				<PageCanvas
					hiro={hiro1}
					pnj={minako}
					currentScene={scene}
					scenArray={sceneOne}
					mysterious={mysterious}
					onUpdateScene={updateScene}
					onUpdateScore={setScore}
				/>
			) : null}
			{score === 0 && scene === 2 ? <BadEnd /> : null}
		</>
	);
}

export default App;
