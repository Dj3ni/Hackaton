import "./PagesCanvas.css";
import DialogueBox from "../DialogueBox/Dialoguebox";

const PageCanvas = () => {
	return (
		<main className="main">
			<section className="content"></section>
			<p className="CharaName">HERO</p>
			<section className="dialogue">
				<DialogueBox />
			</section>
		</main>
	);
};

export default PageCanvas;
