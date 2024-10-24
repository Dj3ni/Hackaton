import { useState } from "react";
import "./App.css";
import PageCanvas from "./containers/PagesCanvas/PagesCanvas";
import Test from "./containers/test";

function App() {
	const [scene, setScene] = useState(0);

	const updateScene = (newScene: number) => {
		setScene(newScene);
	}
	return (
		<>
		{scene === 0 ?<PageCanvas onUpdateScene={updateScene} /> : null}
		{scene === 1 ?<Test /> : null}
			
		</>
	);
}

export default App;
