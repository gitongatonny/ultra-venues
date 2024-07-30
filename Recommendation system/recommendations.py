import pandas as pd
import pickle
from sklearn.metrics.pairwise import cosine_similarity
from database import get_venue_data

# Load the trained model
with open('vectorizer.pkl', 'rb') as f:
    vectorizer = pickle.load(f)
with open('cosine_sim_external.pkl', 'rb') as f:
    cosine_sim_external = pickle.load(f)

def get_popular_venues(n_recommendations=5):
    df = get_venue_data()
    popular_venues = df.head(n_recommendations)
    return popular_venues

def get_venue_recommendations(selected_venue_id, n_recommendations=5):
    df = get_venue_data()

    # Fill NaN values with an empty string
    df['Place'] = df['Place'].fillna('')
    df['Price'] = df['Price'].fillna('')
    df['Rating'] = df['Rating'].fillna('')

    # Convert columns to string type
    df['Place'] = df['Place'].astype(str)
    df['Price'] = df['Price'].astype(str)
    df['Rating'] = df['Rating'].astype(str)

    # Combine relevant features into a single string for each venue
    df['features'] = df['location'] + ' ' + df['price'] + ' ' + df['rating']

    # Vectorize the venue data using the loaded vectorizer
    venue_feature_matrix = vectorizer.transform(df['features'])

    # Compute cosine similarity with the external data
    cosine_sim = cosine_similarity(venue_feature_matrix, cosine_sim_external)

    # Get the index of the selected venue
    selected_index = df[df['id'] == selected_venue_id].index[0]

    # Get similarity scores for the selected venue
    sim_scores = list(enumerate(cosine_sim[selected_index]))

    # Sort venues based on similarity scores
    sim_scores = sorted(sim_scores, key=lambda x: x[1], reverse=True)

    # Get the indices of the top recommendations
    rec_indices = [i[0] for i in sim_scores[1:n_recommendations + 1]]

    # Return the recommended venues
    recommended_venues = df.iloc[rec_indices]
    return recommended_venues
