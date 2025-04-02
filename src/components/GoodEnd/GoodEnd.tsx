import "./GoodEnd.css";
const GoodEnd = ({ onEnd }: { onEnd: () => void }) => {
	return (
		<main className="goodEnd">
			<p className="textgd">
				Thanks to your decisions, you have saved the world!
			</p>

			<button onClick={onEnd} className="btngd">
				View Credits
			</button>
			<audio controls loop className="audio">
				<source src="/sound/GoodEnding.mp3" type="audio/mp3"></source>
			</audio>
		</main>
	);
};

export default GoodEnd;
