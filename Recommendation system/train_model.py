import pandas as pd
from sklearn.feature_extraction.text import TfidfVectorizer
from sklearn.metrics.pairwise import cosine_similarity
import pickle

# Load the external dataset
external_df = pd.read_excel('C:/Users/FRED/Downloads/HotelFinalDataset.xlsx')

# Fill NaN values with an empty string
external_df['Place'] = external_df['Place'].fillna('')
external_df['Price'] = external_df['Price'].fillna('')
external_df['Rating'] = external_df['Rating'].fillna('')

# Convert columns to string type
external_df['Place'] = external_df['Place'].astype(str)
external_df['Price'] = external_df['Price'].astype(str)
external_df['Rating'] = external_df['Rating'].astype(str)

# Preprocess the external dataset
external_df['features'] = external_df['Place'] + ' ' + external_df['Price'] + ' ' + external_df['Rating']

# Vectorize the features using TF-IDF
vectorizer = TfidfVectorizer(stop_words='english')
external_feature_matrix = vectorizer.fit_transform(external_df['features'])

# Compute cosine similarity matrix
cosine_sim_external = cosine_similarity(external_feature_matrix, external_feature_matrix)

# Save the model (vectorizer and cosine similarity matrix)
with open('vectorizer.pkl', 'wb') as f:
    pickle.dump(vectorizer, f)
with open('cosine_sim_external.pkl', 'wb') as f:
    pickle.dump(cosine_sim_external, f)

print("Model training complete and saved.")
