<?php

namespace App\Http\Controllers;

use App\Models\Demande;
use App\Models\Service;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DemandeController extends Controller
{
    /**
     * Récupérer toutes les demandes (pour un administrateur ou un expert).
     */
    public function store(Request $request)
    {
        try {
            // Valider les données
            $validatedData = $request->validate([
                'service_id' => 'required|exists:services,id',
            ]);
    
            // Récupérer l'utilisateur connecté
            $user = $request->user();
            if (!$user) {
                throw new \Exception("Utilisateur non authentifié.");
            }
    
            // Récupérer les informations du service
            $service = Service::findOrFail($validatedData['service_id']);
    
            // Créer la demande
            $demande = Demande::create([
                'user_id' => $user->id,  
                'service_id' => $service->id,
                'nom' => $user->name,
                'email' => $user->email,
                'description' => $service->description,
                'prix' => $service->price,
                'status' => 'pending',
            ]);
    
            return response()->json([
                'message' => 'Demande créée avec succès.',
                'demande' => $demande,
            ], 201);
    
        } catch (\Exception $e) {
            // Retourner une réponse d'erreur avec l'exception
            return response()->json([
                'error' => 'Erreur interne du serveur.',
                'message' => $e->getMessage(),
            ], 500);
        }
    }
    public function getPendingDemandes()
{
    $demandes = Demande::where('status', 'pending')->get();
    return response()->json($demandes, 200);
}

public function updateStatus(Request $request, $id)
{
    $validated = $request->validate([
        'status' => 'required|in:pending,approved,rejected',
    ]);

    $demande = Demande::findOrFail($id);
    $demande->status = $validated['status'];
    $demande->save();

    return response()->json(['message' => 'Status updated successfully!'], 200);
}

    
    

}