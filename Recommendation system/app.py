from flask import Flask, request, jsonify
from recommendations import get_venue_recommendations

app = Flask(__name__)

@app.route('/recommend', methods=['GET'])
def recommend():
    venue_id = int(request.args.get('venue_id'))
    n_recommendations = int(request.args.get('n', 5))
    try:
        recommendations = get_venue_recommendations(venue_id, n_recommendations)
        return jsonify(recommendations.to_dict(orient='records'))
    except Exception as e:
        return jsonify({'error': str(e)}), 400

if __name__ == '__main__':
    app.run(debug=True)
