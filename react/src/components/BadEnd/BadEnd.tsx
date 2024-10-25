import "./badEnd.css";
const BadEnd = () => {
	return (
		<main className="badEnd">
			<p className="text">
				Because of your decisions, you have set the world on fire !
			</p>
			<audio controls loop>
				<source src="/sound/BadEnding.wav" type="audio/wav"></source>
			</audio>
			<button className="btn">Quitter le jeu</button>
		</main>
	);
};

export default BadEnd;
