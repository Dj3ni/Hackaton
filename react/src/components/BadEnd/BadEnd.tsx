import "./badEnd.css";
const BadEnd = ({ onEnd }: { onEnd: () => void }) => {
	return (
		<main className="badEnd">
			<p className="text">
				Because of your decisions, you have set the world on fire !
			</p>

			<button onClick={onEnd} className="btn">
				View Credits
			</button>
			<audio controls loop className="audio">
				<source src="/sound/BadEnding.wav" type="audio/wav"></source>
			</audio>
		</main>
	);
};

export default BadEnd;
